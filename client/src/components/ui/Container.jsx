import React, { Component } from "react";
import axios from "axios";

// Load components

import Map from "./map/Map";
import MenuBar from "./menu/MenuBar";

class Container extends Component {
  state = {
    places: null,
  };

  // Component lyfecycles

  /*componentDidMount = (payload) => {
    axios
      .post("http://localhost/2020/tejiendo_ciudad/data/index.php/api/place")
      .then((res) => {
        this.setState((places = payload));
      });
  };*/

  render() {
    return (
      <div className="container">
        <MenuBar places={this.state.places} />
        <Map />
      </div>
    );
  }
}

export default Container;
