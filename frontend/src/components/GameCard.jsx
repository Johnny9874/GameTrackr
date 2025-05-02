import React from "react";
import { useState } from "react";

function GameCard({ image, title, description, price, platform }) {
    const [open, setOpen] = useState(false);
    return (
        <div className="bg-white p-4 rounded shadow hover:shadow-lg transition-shadow duration-200 flex flex-col w-72 mx-auto">
            <div className="aspect-[3/2] overflow-hidden rounded">
            <img
            src={image}
            alt={title}
            onClick={() => setOpen(!open)}
            className="w-full h-full object-cover cursor-pointer"
            />
            </div>

        {open && (
            <div className="mt-4 text-center break-words">
                <h2 className="text-xl font-bold mb-2">{title}</h2>
                <p className="text-sm mb-2">{description}</p>
                <p className="mb-1">Prix : {price}</p>
                <p className="mb-2">Plateforme : {platform}</p>
                <button className="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Ajouter au backlog
                </button>
            </div>
        )}
        </div>
    );
}

export default GameCard;