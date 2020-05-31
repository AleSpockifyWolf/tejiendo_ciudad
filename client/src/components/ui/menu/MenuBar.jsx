import React from "react";

// Load components

import SearchBar from "../../common/formfields/SearchBar";
import Heading from "../../common/headings/Heading";
import FieldHeading from "../../common/headings/FieldHeading";
import SimpleBlackButton from "../../common/buttons/SimpleBlackButton";
import ResultCard from "../../common/cards/ResultCard";

const MenuBar = () => {
  return (
    <div className="menubar">
      <section className="menubar-filters">
        <Heading text="TEJIENDO CIUDAD" />
        <FieldHeading text="Búsqueda individual" />
        <SearchBar />
        <FieldHeading text="Búsqueda por criterio" />
        <nav className="menubar-filter-buttons">
          <SimpleBlackButton text="Alfabético" />
          <SimpleBlackButton text="Tipo" />
        </nav>
      </section>
      <section className="menubar-results">
        <FieldHeading text="Resultados de la búsqueda" />
        <div className="menubar-results-list">
          <ResultCard
            rampas="2"
            pasamanos="1"
            banos="3"
            iluminacion="5"
            puentes="3"
            elevadores="2"
            escaleras="4"
            placas="1"
          />
          <ResultCard
            rampas="2"
            pasamanos="1"
            banos="3"
            iluminacion="5"
            puentes="3"
            elevadores="2"
            escaleras="4"
            placas="1"
          />
          <ResultCard
            rampas="2"
            pasamanos="1"
            banos="3"
            iluminacion="5"
            puentes="3"
            elevadores="2"
            escaleras="4"
            placas="1"
          />
          <ResultCard
            rampas="2"
            pasamanos="1"
            banos="3"
            iluminacion="5"
            puentes="3"
            elevadores="2"
            escaleras="4"
            placas="1"
          />
        </div>
      </section>
    </div>
  );
};

export default MenuBar;
