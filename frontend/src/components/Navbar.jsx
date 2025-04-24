import { Navbar, Typography, Button, IconButton, Collapse } from "@material-tailwind/react";
import { Bars3Icon, XMarkIcon } from "@heroicons/react/24/outline";
import { useState } from "react";
import { Link } from "react-router-dom";

function GameTrackrNavbar() {
  const [openNav, setOpenNav] = useState(false);

  const toggleNav = () => setOpenNav(!openNav);

  return (
    <Navbar className="bg-gray-900 text-white px-4 py-3 shadow-md">
      <div className="flex items-center justify-between">
        <Typography as="a" href="/" className="text-xl font-bold">
          GameTrackr
        </Typography>
    <div className="hidden lg:flex items-center gap-6">
        <Link to="/" className="text-white font-bold hover:text-cyan-300 transition-colors duration-200">Accueil</Link>
        <Link to="/backlog" className="text-white font-bold hover:text-cyan-300 transition-colors duration-200">Backlog</Link>
        <Link to="/sessions" className="text-white font-bold hover:text-cyan-300 transition-colors duration-200">Sessions</Link>
    </div>

        <IconButton
          variant="text"
          className="ml-auto h-6 w-6 text-inherit lg:hidden"
          onClick={toggleNav}
        >
          {openNav ? <XMarkIcon className="h-6 w-6" /> : <Bars3Icon className="h-6 w-6" />}
        </IconButton>
      </div>
        <div className={`overflow-hidden transition-all duration-300 ease-in-out lg:hidden ${ openNav ? "max-h-96 opacity-100" : "max-h-0 opacity-0" }`}>

            <div className="bg-gray-900 text-white px-4 py-3 shadow-md">
                <Link to="/" className="block text-white font-bold py-2 hover:text-cyan-300 transition-colors duration-200">Accueil</Link>
                <Link to="/backlog" className="block text-white font-bold py-2 hover:text-cyan-300 transition-colors duration-200">Backlog</Link>
                <Link to="/sessions" className="block text-white font-bold py-2 hover:text-cyan-300 transition-colors duration-200">Sessions</Link>
            </div>
        </div>
    </Navbar>
  );
}

export default GameTrackrNavbar;
