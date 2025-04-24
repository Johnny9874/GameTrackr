// src/App.jsx
import { Routes, Route } from 'react-router-dom'
import Home from './pages/Home'
import Backlog from './pages/Backlog'
import Sessions from './pages/Sessions'
import GameTrackrNavbar from "./components/Navbar";

function App() {
  return (
    <>
    <GameTrackrNavbar />
    <Routes>
      <Route path="/" element={<Home />} />
      <Route path="/backlog" element={<Backlog />} />
      <Route path="/sessions" element={<Sessions />} />
    </Routes>
    </>
  )
}

export default App

