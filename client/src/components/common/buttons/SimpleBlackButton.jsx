import React from "react";

const SimpleBlackButton = (props) => {
  return (
    <button onClick={props.onClick} className="simple-black-button">
      {props.text}
    </button>
  );
};

export default SimpleBlackButton;
