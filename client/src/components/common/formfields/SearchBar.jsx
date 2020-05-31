import React from "react";

const SearchBar = () => {
  return (
    <form className="search-bar">
      <input
        placeholder="Que desea encontrar"
        type="text"
        className="search-bar-field"
      />
      <button className="search-button">BUSCAR</button>
    </form>
  );
};

export default SearchBar;
