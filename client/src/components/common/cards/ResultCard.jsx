import React from "react";

const ResultCard = (props) => {
  return (
    <div className="result-card">
      <section className="result-card-row">
        <span className="result-card-name">{props.type} - </span>
        <span className="result-card-name">{props.Estacion}</span>
      </section>
      <section className="result-card-row">
        <span className="result-card-extra text">Linea 9</span>
      </section>
      <section className="result-card-row">
        <p className="result-card-services text">Servicios:</p>
        <div className="result-card-services-list">
          <span className="result-card-services-item-box">
            <p className="result-card-services-item-title text">
              Rampas: {props.rampas}
            </p>
            <p className="result-card-services-item-title text">
              Pasamandos: {props.pasamanos}
            </p>
            <p className="result-card-services-item-title text">
              Baños: {props.banos}
            </p>
            <p className="result-card-services-item-title text">
              Iluminación: {props.iluminacion}
            </p>
            <p className="result-card-services-item-title text">
              Puente peatonal: {props.puentes}
            </p>
            <p className="result-card-services-item-title text">
              Elevadores: {props.elevadores}
            </p>
            <p className="result-card-services-item-title text">
              Escaleras eléctricas: {props.escaleras}
            </p>
            <p className="result-card-services-item-title text">
              Placas guías: {props.placas}
            </p>
          </span>
        </div>
      </section>
    </div>
  );
};

export default ResultCard;
