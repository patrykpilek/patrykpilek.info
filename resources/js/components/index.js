import React from 'react';
import ReactDOM from 'react-dom';
import PostIndex from "./Posts/PostIndex";

if (document.getElementById('react-posts')) {
    ReactDOM.render(<PostIndex />, document.getElementById('react-posts'));
}