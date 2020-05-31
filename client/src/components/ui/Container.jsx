import React, { Component } from "react";
import axios from "axios";

// Load components

import Map from "./map/Map";
import MenuBar from "./menu/MenuBar";
import ResultCard from "../common/cards/ResultCard";

class Container extends Component {
  state = {
    places: null,
  };

  // Component lyfecycles

  componentDidMount = () => {
    axios
      .post("http://localhost/2020/tejiendo_ciudad/data/index.php/api/place")
      .then((res) => {
        //debugger
        this.setState({ places: res.data });
      });
  };

  render() {
    return (
      <div className="container">
        <MenuBar
          places={this.state.places}
          cards={
            this.state.places === null ? (
              <p>no data</p>
            ) : (
              this.state.places.map((place) => <ResultCard key={place._id} />)
            )
          }
        />
        <Map />
      </div>
    );
  }
}

export default Container;
