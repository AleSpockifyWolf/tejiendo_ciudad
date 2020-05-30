Create database _db_tc_001;

CREATE SCHEMA s_registro
    AUTHORIZATION postgres;
CREATE SCHEMA s_consulta
    AUTHORIZATION postgres;
CREATE SCHEMA s_evaluacion
    AUTHORIZATION postgres;

CREATE TABLE s_busqueda.tb_transporte
(
    tdt_id integer NOT NULL,
    tdt_accesibilidad json, /*'{"tipo": "", "evaluacion": 0...5, "":true}'::json;'*/
    tdt_location json,
    PRIMARY KEY (tdt_id)
);

CREATE INDEX idx_tbt ON s_busqueda.tb_transporte USING gin (tdt_accesibilidad);

ALTER TABLE s_busqueda.tb_transporte
    OWNER to postgres;