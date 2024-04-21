CREATE TABLE profile_role (
    id INTEGER PRIMARY KEY,
    description VARCHAR(255) NOT NULL
);

CREATE TABLE profile_state (
    id INTEGER PRIMARY KEY,
    description VARCHAR(255) NOT NULL
);

CREATE TABLE profile (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(255) UNIQUE NOT NULL,
    name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    state INTEGER DEFAULT 0 REFERENCES profile_state(id),
    role INTEGER DEFAULT 1 REFERENCES profile_role(id)
);

CREATE TABLE payment_type (
    id INTEGER PRIMARY KEY,
    description VARCHAR(255) NOT NULL
);

CREATE TABLE payment (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    user INTEGER REFERENCES profile(id),
    quantity INTEGER NOT NULL,
    amount DECIMAL(10,2) NOT NULL,
    payment_date DATE NOT NULL,
    ptype INTEGER REFERENCES payment_type(id),
    comments VARCHAR(255) NOT NULL
);
