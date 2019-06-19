import React from 'react';

const PostContent = (props) => (
    <div className="justify-content-center">
        <div className="card mb-2">
            <div className="card-body">
                <ul className="list-unstyled">
                    <li className="media">
                        <img src={window.location.origin + '/storage/avatars/' + props.post.user.avatar}
                             className="image-avatar align-self-center rounded-circle mr-3"
                             alt={props.post.user.username} />
                        <div className="media-body">
                            <h6 className="mt-0">
                                <a href={`/users/${props.post.user.username}`}>
                                    <b>{props.post.user.username}</b>
                                </a>{' '} - <small>{props.post.humanCreatedAt}</small>
                            </h6>
                            <p className="mb-0">
                                {props.post.body}
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
);

export default PostContent;