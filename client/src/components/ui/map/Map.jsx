import React from "react";

const Map = () => {
  return (
    <div className="map">
      <iframe
        className="temp-map"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.6616309270976!2d-99.16978803509346!3d19.427020586887494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff35f5bd1563%3A0x6c366f0e2de02ff7!2sEl%20%C3%81ngel%20de%20la%20Independencia!5e0!3m2!1ses-419!2smx!4v1590868667290!5m2!1ses-419!2smx"
        frameborder="0"
        allowfullscreen=""
        aria-hidden="false"
        tabindex="0"
      ></iframe>
    </div>
  );
};

export default Map;
