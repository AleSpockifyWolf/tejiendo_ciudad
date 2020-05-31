import React from "react";

// Load components

import SearchBar from "../../common/formfields/SearchBar";
import Heading from "../../common/headings/Heading";
import FieldHeading from "../../common/headings/FieldHeading";
import SimpleBlackButton from "../../common/buttons/SimpleBlackButton";
import ResultCard from "../../common/cards/ResultCard";

const MenuBar = (props) => {
  return (
    <div className="menubar">
      <section className="menubar-filters">
        <Heading text="TEJIENDO CIUDAD" />
        <FieldHeading text="Búsqueda individual" />
        <SearchBar />
        <FieldHeading text="Búsqueda por criterio" />
        <nav className="menubar-filter-buttons">
          <SimpleBlackButton onClick={props.onAlphaClick} text="Alfabético" />
          <SimpleBlackButton onClick={props.onTypeClick} text="Tipo" />
        </nav>
      </section>
      <section className="menubar-results">
        <FieldHeading text="Resultados de la búsqueda" />
        <div className="menubar-results-list">
          {props.places === null ? (
            <p>no data</p>
          ) : (
            props.places.map((place) => <ResultCard key={place._id} />)
          )}
        </div>
      </section>
    </div>
  );
};

export default MenuBar;
