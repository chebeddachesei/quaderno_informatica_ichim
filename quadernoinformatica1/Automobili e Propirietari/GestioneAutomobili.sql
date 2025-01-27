-- Creazione del database
CREATE DATABASE GestioneAutomobili;

-- Selezione del database
USE GestioneAutomobili;

-- Creazione della tabella Automobili
CREATE TABLE Automobili (
    Targa VARCHAR(10) PRIMARY KEY,         -- Identificativo unico per ogni automobile
    Modello VARCHAR(50) NOT NULL,          -- Modello dell'automobile
    Marca VARCHAR(50) NOT NULL,            -- Marca dell'automobile
    Colore VARCHAR(20) NOT NULL            -- Colore dell'automobile
);

-- Creazione della tabella Proprietari
CREATE TABLE Proprietari (
    CodiceFiscale VARCHAR(16) PRIMARY KEY, -- Identificativo unico per ogni proprietario
    Nome VARCHAR(50) NOT NULL,             -- Nome del proprietario
    Cognome VARCHAR(50) NOT NULL           -- Cognome del proprietario
);

-- Creazione della tabella Possesso
CREATE TABLE Possesso (
    Targa VARCHAR(10),                     -- Chiave esterna che punta alla tabella Automobili
    CodiceFiscale VARCHAR(16),             -- Chiave esterna che punta alla tabella Proprietari
    Data_inizio DATE NOT NULL,             -- Data di inizio del periodo di possesso
    Data_fine DATE DEFAULT NULL,           -- Data di fine del periodo di possesso (NULL se è attuale)
    PRIMARY KEY (Targa, CodiceFiscale, Data_inizio), -- Chiave primaria composta
    FOREIGN KEY (Targa) REFERENCES Automobili(Targa) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (CodiceFiscale) REFERENCES Proprietari(CodiceFiscale) ON DELETE CASCADE ON UPDATE CASCADE
);
