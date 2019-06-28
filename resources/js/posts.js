import React from 'react';
import ReactDOM from 'react-dom';
import PostIndex from "./components/Posts";

if (document.getElementById('posts')) {
    ReactDOM.render(<PostIndex />, document.getElementById('posts'));
}