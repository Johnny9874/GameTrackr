import React from "react";

function Footer() {
  return (
    <footer className="bg-gray-900 text-white py-6 mt-auto">
      <div className="container mx-auto px-4 text-center">
        <p className="mb-2">&copy; {new Date().getFullYear()} GameTrackr. Tous droits réservés.</p>
        <div className="flex justify-center space-x-6">
          <a href="https://github.com/tonprofil" target="_blank" rel="noopener noreferrer" className="hover:text-indigo-400">
            GitHub
          </a>
          <a href="/mentions-legales" className="hover:text-indigo-400">
            Mentions légales
          </a>
        </div>
      </div>
    </footer>
  );
}

export default Footer;
