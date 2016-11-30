DROP DATABASE IF EXISTS cmps394_LA_Emergency_Response;

CREATE DATABASE IF NOT EXISTS cmps394_LA_Emergency_Response;
USE cmps394_LA_Emergency_Response;

CREATE TABLE IF NOT EXISTS Personnel (
  id int(8) NOT NULL AUTO_INCREMENT,
  name varchar(30) NOT NULL,
  email varchar(60) NOT NULL UNIQUE,
  phone varchar(11) NOT NULL,
  password varchar(40) NOT NULL,
  is_dispatcher boolean NOT NULL DEFAULT 0,
  on_call boolean NOT NULL DEFAULT 0,
  created_at TIMESTAMP,
  PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS Issues (
  id int(8) NOT NULL AUTO_INCREMENT,
  name varchar(30),
  email varchar(60),
  phone varchar(11),
  location point NOT NULL,
  issue varchar(255),
  issue_type varchar(20),
  is_resolved boolean NOT NULL DEFAULT 0,
  notes varchar(255),
  created_at timestamp NOT NULL,
  resolved_at datetime,
  p_id int,
  SPATIAL INDEX(location),
  PRIMARY KEY (id),
  FOREIGN KEY (p_id) REFERENCES Personnel(id)
);

INSERT INTO Personnel 
    (name, email, phone, password, is_dispatcher)
    VALUES 
    ('admin', 'admin@localhost.tld', '5558675309', MD5('secret'), 1),
    ('billy', 'william.williamson-2@selu.edu', '9852857237', MD5('secret'), 1),
    ('craig', 'billy@147tech.com', '5556660000', MD5('secret'), 0),
    ('dee', 'wewill147@gmail.com', '9852857237', MD5('secret'), 0);

INSERT INTO Issues
    (name, email, phone, location, issue, issue_type)
    VALUES
    ('foo', 'foo@bar.com', '9995554321', Point(30.2958194,-89.7219651), 'Got in an accident, with injury.', 'medical'),
    ('bar', 'bar@foo.com', '6665554444', Point(30.5945858,-91.4687071), 'Lord Jesus, its a fire!', 'fire');
