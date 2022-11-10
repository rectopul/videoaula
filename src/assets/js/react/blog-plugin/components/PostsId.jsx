import React, { Component } from 'react'

import api from '../services/api'

class PostsId extends Component {

    state = {
        post: {}
    }

    async componentDidMount() {
        try{
            const response = await api.get(`/wp/v2/posts/${this.props.id}`)
            this.setState({ post: response.data })
            console.log(this.state)
        } catch(e) {
            console.log(e)
        }
    }

    render(){
        return (
            <article className="blogplugin__post">
                { Object.keys(this.state.post).length > 0 && 
                    <a className="blogplugin__link-post" href={this.state.post.link} title="Acessar postagem">
                        <h1 className="blogplugin__title-post">
                            {this.state.post.title.rendered}
                        </h1>
                        <div className="blogplugin__description" dangerouslySetInnerHTML={{ __html: this.state.post.excerpt.rendered }}></div>
                    </a>
                }
            </article>
        )
    }
}

export default PostsId