import React from 'react';

const PostLoader = (props) => (
    <span>
    {
        props.progress && (
            <div className="text-center">
                <div className="spinner-border" role="status">
                    <span className="sr-only">Loading...</span>
                </div>
            </div>
        )
    }
    {
        props.completed && (
            <div className="text-center">
                <h5><strong>There is no more messages</strong></h5>
            </div>
        )
    }
    </span>
);

export default PostLoader;
