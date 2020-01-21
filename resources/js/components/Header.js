import React from 'react';
import { Link } from 'react-router-dom';
import GoogleAuth from './GoogleAuth';

const Header = () => {
    return (
        <div className="ui secondary pointing menu">
            <a href="/" className="item active">
                patrykpilek.info
            </a>
            <div className="right menu">
                <a href="/" className="item">
                    Movies
                </a>
                <a href="/messenger" className="item">
                    Messenger
                </a>
                <a href="/streams" className="item">
                    Streams
                </a>
                <GoogleAuth />
            </div>
        </div>
    );
};

export default Header;
