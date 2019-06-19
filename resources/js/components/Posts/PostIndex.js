import React from 'react';
import axios from 'axios';
import PostContent from './PostContent';
import PostLoader from './PostLoader';

class PostIndex extends React.Component {
    constructor(props) {
        super(props);
        this.state =  {
            posts: [],
            progress: false,
            completed: false,
        };
        // bind
        this.handleSubmit = this.handleSubmit.bind(this);
        this.handleChange = this.handleChange.bind(this);
        this.infiniteScroll = this.infiniteScroll.bind(this);
    }

    componentDidMount() {
        this.getInitailState();
        window.addEventListener('scroll', this.infiniteScroll);
        Echo.private('new-post').listen('PostCreated', e => {
            // console.log('from pusher', e.post);
            // this.setState({ posts: [e.post, ...this.state.posts] });
            if (window.Laravel.user.following.includes(e.post.user_id)) {
                this.setState({ posts: [e.post, ...this.state.posts] });
            }
        });
    }

    getInitailState() {
        this.setState(() => ({
            progress: true,
        }));

        axios.post("/posts", {
            'offset': this.state.posts.length
        }).then((response) => {
            this.setState(() => ({
                posts: response.data,
                progress: false,
                completed: response.data.length ? false : true
            }));
        }).catch((error) => {
            console.log(error);
        });
    }

    infiniteScroll() {
        if (!this.state.completed &&  !this.state.progress) {
            this.setState(() => ({
                progress: true,
            }));

            axios.post("/posts", {
                'offset': this.state.posts.length
            }).then((response) => {
                this.setState((prevState) => ({
                    posts: prevState.posts.concat(response.data),
                    progress: false,
                    completed: response.data.length ? false : true
                }));
            }).catch((error) => {
                console.log(error);
            });
        }
    }

    handleSubmit(e) {
        e.preventDefault();
        axios.post('/createPost', {
                body: this.state.body
        }).then(response => {
            // console
            // console.log('from handle submit', response);
            // set state
            this.setState({
                posts: [response.data, ...this.state.posts],
                body: ''
            });
        }).catch((error) => {
            console.log(error);
        });
        // clear the state body
        // this.setState({
        //     body: ''
        // });
    }

    handleChange(e) {
        this.setState({
            body: e.target.value
        });
    }

    handleKeyDown(e, hs) {
        if (e.key === 'Enter' && e.shiftKey === false) {
            hs(e);
        }
    }

    render() {
        const Post = this.state.posts.map((post) => (
            <PostContent key={post.id} post={post} />
        ));

        return (
            <div>
                <div className="card mb-2">
                    <div className="card-body">
                        <form onSubmit={this.handleSubmit} onKeyDown={(e) => {
                            this.handleKeyDown(e, this.handleSubmit);
                        }}>
                            <div className="form-group">
                                <textarea
                                    onChange={this.handleChange}
                                    value={this.state.body}
                                    className="form-control"
                                    rows="3"
                                    maxLength="290"
                                    placeholder="Napisz wiadomosc..."
                                    required
                                />
                            </div>
                            {/*<button type="submit" className="btn btn-outline-secondary btn-block">Wyslij Wiadomosc</button>*/}
                        </form>
                    </div>
                </div>

                { Post.length > 0 && Post }
                <PostLoader progress={this.state.progress} completed={this.state.completed} />
            </div>
        )
    }
}

export default PostIndex;



