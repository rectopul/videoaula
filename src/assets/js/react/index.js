import React from 'react'
import ReactDOM from 'react-dom'

import BlogPlugin from './blog-plugin'

const root = document.querySelector('[data-component=blog-plugin]');

if(root) {
    ReactDOM.render(
        <BlogPlugin />
    , root);
}
