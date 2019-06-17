import React, { Component } from 'react';
import axios from 'axios';

class App extends Component {
    constructor(props) {
        super(props);
        this.state = {
            body: '',
            posts: [],
            loading: false
        };
        // bind
        this.handleSubmit = this.handleSubmit.bind(this);
        this.handleChange = this.handleChange.bind(this);
        this.renderPosts = this.renderPosts.bind(this);
    }

    getPosts() {
        this.setState({ loading: true });
        axios.get('/posts').then((
            response // console.log(response.data.posts)
            ) =>
                this.setState({
                    posts: [...response.data.posts],
                    loading: false
                })
        );
    }

    componentWillMount() {
        this.getPosts();
    }

    componentDidMount() {
        Echo.private('new-post').listen('PostCreated', e => {
            // console.log('from pusher', e.post);
            // this.setState({ posts: [e.post, ...this.state.posts] });
            if (window.Laravel.user.following.includes(e.post.user_id)) {
                this.setState({ posts: [e.post, ...this.state.posts] });
            }
        });
    }

    handleSubmit() {
        axios
            .post('/posts', {
                body: this.state.body
            })
            .then(response => {
                // console
                // console.log('from handle submit', response);
                // set state
                this.setState({
                    posts: [response.data, ...this.state.posts],
                    body: ''
                });
            });
        // clear the state body
        this.setState({
            body: ''
        });
    }

    handleChange(e) {
        this.setState({
            body: e.target.value
        });
    }

    handleKeyDown(e, cb) {
        if (e.key === 'Enter' && e.shiftKey === false) {
            e.preventDefault();
            cb();
        }
    };

    renderPosts() {
        return this.state.posts.map(post => (
            <div key={post.id} className="media">
                <img src={window.location.origin + '/storage/avatars/' + post.user.avatar} className="align-self-center mr-3 image-avatar img-fluid rounded-circle mb-3" />
                <div className="media-body">
                    <h6 className="mt-0">
                        <a href={`/users/${post.user.username}`}>
                            <b>{post.user.username}</b>
                        </a>{' '}- <small>{post.humanCreatedAt}</small>
                    </h6>
                    <p>{post.body}</p>
                </div>
            </div>
        ));
    }

    render() {

        return (
            <div className="justify-content-center">
                <div className="card mb-2">
                    <div className="card-body">
                        <form onSubmit={this.handleSubmit}
                              onKeyDown={(e) => { this.handleKeyDown(e, this.handleSubmit); }} >
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
                            {/*<input type="submit" value="Post" className="form-control" />*/}
                        </form>
                    </div>
                </div>

                {this.state.posts.length > 0 && (
                    <div className="card">
                        <div className="card-body">
                            {!this.state.loading ? this.renderPosts() :
                                <div className="d-flex justify-content-center">
                                    <div className="spinner-border" role="status">
                                        <span className="sr-only">Loading...</span>
                                    </div>
                                </div>
                            }
                        </div>
                    </div>
                )}
            </div>
        );
    }
}

export default App;