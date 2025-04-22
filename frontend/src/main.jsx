// src/main.jsx
import React from 'react'
import ReactDOM from 'react-dom/client'
import App from './App.jsx'
import './index.css'

// 🧠 C'est lui qui manque !
import { BrowserRouter } from 'react-router-dom'

ReactDOM.createRoot(document.getElementById('root')).render(
  <React.StrictMode>
    <BrowserRouter> {/* Obligatoire autour de <App /> */}
      <App />
    </BrowserRouter>
  </React.StrictMode>,
)

