import React from 'react';
import ReactDOM from 'react-dom';
import Posts from "./components/Posts";

if (document.getElementById('posts')) {
    ReactDOM.render(<Posts />, document.getElementById('posts'));
}