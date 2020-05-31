import React from "react";

// Load components

import Map from "./map/Map";
import MenuBar from "./menu/MenuBar";

const Container = () => {
  return (
    <div className="container">
      <MenuBar />
      <Map />
    </div>
  );
};

export default Container;
