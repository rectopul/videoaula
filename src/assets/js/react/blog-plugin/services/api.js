import axios from 'axios';

const api = axios.create({
    baseURL: 'https://blog.auaha.com.br/wp-json'
});

export default api;