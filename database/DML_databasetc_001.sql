/****************************************************
{
    "id": "",
    "type": "Metro"
    "name": "Chilpancingo",
    "line": "Línea 9",     
    "latitude": 19.40575613,
    "longitude": -99.1683054,
    "services": [
        "rampas":[{
            "evaluacion":"0.0",
            "activo":"0",
            "Comentarios":"loremipsum"
        }],
        "pasamanos":[{
            "evaluacion":"0.0",
            "activo":"0",
            "Comentarios":"loremipsum"
        }],
        "wc":[{
            "evaluacion":"0.0",
            "activo":"0",
            "Comentarios":"loremipsum"
        }],
        "iluminacion":[{
            "evaluacion":"0.0",
            "activo":"0",
            "Comentarios":"loremipsum"
        }],
        "puente_peatonal":[{
            "evaluacion":"0.0",
            "activo":"0",
            "Comentarios":"loremipsum"
        }],
        "elevadores":[{
            "evaluacion":"0.0",
            "activo":"0",
            "Comentarios":"loremipsum"
        }],
        "escaleras_electricas":[{
            "evaluacion":"0.0",
            "activo":"0",
            "Comentarios":"loremipsum"
        }],
        "placas_guias":[{
            "evaluacion":"0.0",
            "activo":"0",
            "Comentarios":"loremipsum"
        }],
    ]
}
We store these documents in a table named api, in a jsonb column named jdoc. If a GIN index is created on this column, queries like the following can make use of the index:

-- Find documents in which the key "company" has value "Magnafone"
SELECT jdoc->'guid', jdoc->'name' FROM api WHERE jdoc @> '{"company": "Magnafone"}';


*********************************************************/
