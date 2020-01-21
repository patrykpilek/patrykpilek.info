import React from 'react';
import Hls from 'hls.js';
import { connect } from 'react-redux'
import { fetchStream } from "../../actions";

class StreamShow extends React.Component {

    constructor(props) {
        super(props);

        this.state = {
            stream: this.props,
        };

        this.videoRef = React.createRef();
        this.hls = new Hls();
    }

    componentDidMount() {
        const { id } = this.props.match.params;

        this.props.fetchStream(id);
        this.buildPlayer();
        console.log("mount");
    }

    componentDidUpdate() {
        this.buildPlayer();
        console.log("update");
    }

    componentWillUnmount() {
        if (this.hls) {
            this.hls.destroy();
        }
        console.log("unmount");
    }

    buildPlayer() {
        // if(this.hls || !this.props.stream) {
        //     return;
        // }

        const { id } = this.props.match.params;

        if(Hls.isSupported()) {
            this.hls.loadSource(`http://134.209.188.97/live/${id}/index.m3u8`);
            this.hls.attachMedia(this.videoRef.current);
            this.hls.on(Hls.Events.MANIFEST_PARSED,function() {
                this.videoRef.current.play();
            });
        } else if (this.videoRef.current.canPlayType('application/vnd.apple.mpegurl')) {
            this.videoRef.current.src = `http://134.209.188.97/live/${id}/index.m3u8`;
            this.videoRef.current.addEventListener('loadedmetadata',function() {
                this.videoRef.current.play();
            });
        }
    }

    render() {

        if(!this.state.stream) {
            return <div>Loading...</div>
        }

        return (
            <div>
                <video ref={this.videoRef} style={{width: '100%'}} controls />
                <h1>{this.state.title}</h1>
                <h5>{this.state.description}</h5>
            </div>
        );
    }
}

const mapStateToProps = (state, ownProps) => {
    return {
        stream: state.streams[ownProps.match.params.id]
    };
};

export default connect(mapStateToProps, { fetchStream })(StreamShow);
