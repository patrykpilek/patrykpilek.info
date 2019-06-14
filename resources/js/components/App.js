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

    handleSubmit(e) {
        e.preventDefault();
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

    renderPosts() {
        return this.state.posts.map(post => (
            <div key={post.id} className="media">
                <div className="media-left">
                    <img src={post.user.avatar} className="media-object mr-2" />
                </div>
                <div className="media-body">
                    <div className="user">
                        <a href={`/users/${post.user.username}`}>
                            <b>{post.user.username}</b>
                        </a>{' '}
                        - {post.humanCreatedAt}
                    </div>
                    <p>{post.body}</p>
                </div>
            </div>
        ));
    }

    render() {
        return (
            <div>
                {this.state.posts.length > 0 && (
                    <div>
                        <div className="card">
                            <div className="card-body">
                                <form onSubmit={this.handleSubmit}>
                                    <div className="form-group">
                                        <textarea
                                            onChange={this.handleChange}
                                            value={this.state.body}
                                            className="form-control"
                                            rows="5"
                                            maxLength="140"
                                            placeholder="Napisz swoja wiadomosc..."
                                            required
                                        />
                                    </div>
                                    <input type="submit" value="Wyslij wiadomosc" className="form-control" />
                                </form>
                            </div>
                        </div>
                        <div className="card mt-2">
                            <div className="card-body">
                                {!this.state.loading ? this.renderPosts() : 'Loading...'}
                            </div>
                        </div>
                    </div>
                )}
            </div>
        );
    }
}

export default App;