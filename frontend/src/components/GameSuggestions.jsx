import React from "react";
import { useState } from "react";
import Zelda from "../assets/Zelda.jpg"
import MarioKart from "../assets/MarioKart8.jpg"
import HELLDIVERS from "../assets/HELLDIVERS-2.jpg"
import Stellar from "../assets/Stellarblade.jpg"
import Dragon_Dogma_II from "../assets/Dragon_Dogma_II.jpg"
import GameCard from "../components/GameCard";

function GameSuggestion() {
    const games = [
        {
            image: Zelda,
            title: "The Legend of Zelda: Breath of the Wild",
            description: `The Legend of Zelda: Breath of the Wild est un jeu d’action-aventure en monde ouvert où tu incarnes Link, réveillé après un long sommeil pour sauver le royaume d’Hyrule. Tu es libre d’explorer une vaste carte remplie de secrets, d’énigmes, de créatures et de paysages magnifiques. Le jeu mise sur la liberté totale du joueur : tu peux grimper partout, expérimenter avec l’environnement, et affronter les défis dans l’ordre que tu veux. C’est une aventure immersive, stratégique et pleine de surprises.`,
            price: "70€",
            platform: "Switch, Switch 2",
          },
          {
            image: MarioKart,
            title: "Mario Kart 8 Deluxe",
            description: `Mario Kart 8 Deluxe est un jeu de course fun et frénétique où tu incarnes les personnages emblématiques de l’univers Nintendo. Que tu joues seul ou entre amis, tu peux affronter tes adversaires sur des circuits colorés et dynamiques, tout en lançant des objets loufoques pour renverser la course. Accessible aux débutants mais technique pour les pros, le jeu propose des dizaines de personnages, de karts, et de modes de jeu, y compris le multijoueur local et en ligne. C’est l’expérience Mario Kart ultime, idéale pour des sessions rapides ou des compétitions endiablées.`,
            price: "60€",
            platform: "Switch, Switch 2",
          },
          {
            image: HELLDIVERS,
            title: "HELLDIVERS 2",
            description: `Helldivers II est un jeu de tir coopératif en vue à la troisième personne où tu incarnes un soldat chargé de défendre la Super-Terre contre des menaces extraterrestres. Chaque mission est remplie d’action intense, de stratégies à mettre en place avec ton escouade et d’une bonne dose de chaos (attention au tir allié !). Conçu pour la coopération à 4 joueurs, il combine tactique, adrénaline et humour noir dans un univers de science-fiction militaire. Parfait pour jouer entre amis.`,
            price: "39,99 €",
            platform: "PlayStation 5, PC (Steam)",
          },
          {
            image: Stellar,
            title:"Stellar Blade",
            description: "Stellar Blade est un jeu d’action-aventure futuriste mêlant combats nerveux, narration immersive et visuels à couper le souffle. Tu incarnes Eve, une guerrière envoyée sur une Terre dévastée pour affronter les Naytibas, des créatures mystérieuses qui ont presque anéanti l’humanité. Entre séquences de combat intenses, personnalisation d’équipement et exploration d’environnements variés, le jeu propose une expérience solo riche, pensée pour les fans de gameplay à la Bayonetta ou Nier: Automata.",
            price: "69,99 €",
            platform: "PlayStation 5 (exclusivité console)",
          },

          {
            image: Dragon_Dogma_II,
            title: "Dragon_Dogma_II",
            description: "Dragon Dogma II est un RPG d’action en monde ouvert signé Capcom. Tu incarnes un héros connu sous le nom d’Insurgé, en quête de vérité dans un univers fantastique riche, rempli de créatures mythiques et de combats dynamiques. Le système de pions (des compagnons IA personnalisables) t’accompagne dans des aventures épiques et te permet d’aborder chaque affrontement de façon stratégique. Le gameplay mêle exploration, magie, combats de boss et choix de classe qui influencent ton style de jeu.",
            price: "69,99 €",
            platform: "PlayStation 5, Xbox Series X|S, PC",
          },
    ];

    return (
        <div className="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-5 p-4 items-start">
            {games.map((game, index) => (
            <GameCard
            key={index}
            image={game.image}
            title={game.title}
            description={game.description}
            price={game.price}
            platform={game.platform}
            />
        ))}
    </div>
    );
}

export default GameSuggestion;