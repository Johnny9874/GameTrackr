// src/services/api.js
import axios from 'axios'

const API = axios.create({
  baseURL: 'http://127.0.0.1:8000/api', // adapte si nécessaire
})

// 🔁 Exemples d'appels à ton API Laravel :
export const getBacklogs = (userId) => API.get(`/backlog/${userId}`)
export const createBacklog = (data) => API.post('/backlog', data)

export const getSessions = (userId) => API.get(`/sessions/${userId}`)
export const createSession = (data) => API.post('/sessions', data)

export default API
