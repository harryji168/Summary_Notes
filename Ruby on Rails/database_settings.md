# in `config\database.yml`


development:
  <<: *default
  database: prepare_development

test:
  <<: *default
  database: prepare_test  