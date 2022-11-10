import React, { Component } from 'react'

import Header from './components/Header'
import Posts from './components/Posts'

class BlogPlugin extends Component {
    render(){
        return (
            <div className="blogplugin__wrapper">
                <Header />
                <Posts numPosts = {4} />
            </div>
        )
    }
}

export default BlogPlugin