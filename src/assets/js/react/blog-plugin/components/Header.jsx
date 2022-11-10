import React, { Component } from 'react'

class Header extends Component {
    render(){
        return (
            <div className="blogplugin__header">
                <h2 className="blogplugin__title">
                    blog da auaha
                </h2>
                <a className="blogplugin__link" href="https://blog.auaha.com.br/" title="Acesso o Blog">
                    ACESSE NOSSO BLOG
                </a>
            </div>
        )
    }
}

export default Header