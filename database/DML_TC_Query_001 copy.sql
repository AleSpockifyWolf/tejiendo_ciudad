SELECT tdt_accesibilidad->'type' as "type", tdt_accesibilidad->'name' as "Estacion",
tdt_accesibilidad->'latitude' as "latitud", tdt_accesibilidad->'longitude' as "longitud",
tdt_accesibilidad->'services' as "Servicios"
FROM s_busqueda.tb_transporte 
WHERE tdt_accesibilidad->>'type' like '%Metro%' AND
tdt_accesibilidad->>'name' like 'A%' AND
tdt_accesibilidad->>'name' like '%random_text%';
