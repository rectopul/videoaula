import React, { Component } from 'react'

import api from '../services/api'

import PostsId from './PostsId'

class Posts extends Component {
    
    state = {
        postsId: [],
    };

    async componentDidMount() {

        const response = await api.get('/wp/v2/posts',{params:{per_page:this.props.numPosts, categories_exclude: 10}});
        
        let postsId = []

        response.data.map( item => (
            postsId.push(item.id)
        ))
        
        this.setState({ postsId: postsId });
    }

    render(){
        return (
            <div className="blogplugin__posts">
                {this.state.postsId.map( post => (<PostsId key={post} id={post} />))}
            </div>
        )
    }
}

export default Posts