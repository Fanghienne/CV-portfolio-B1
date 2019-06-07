--
-- PostgreSQL database dump
--

-- Dumped from database version 11.1
-- Dumped by pg_dump version 11.1

-- Started on 2019-06-07 13:57:45

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 6 (class 2615 OID 32812)
-- Name: admin; Type: SCHEMA; Schema: -; Owner: postgres
--

CREATE SCHEMA admin;


ALTER SCHEMA admin OWNER TO postgres;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 204 (class 1259 OID 32849)
-- Name: admin; Type: TABLE; Schema: admin; Owner: postgres
--

CREATE TABLE admin.admin (
    id_admin integer NOT NULL,
    nom_admin character varying(20),
    categorie_admo character varying(30),
    texte_admin text
);


ALTER TABLE admin.admin OWNER TO postgres;

--
-- TOC entry 200 (class 1259 OID 32831)
-- Name: comp; Type: TABLE; Schema: admin; Owner: postgres
--

CREATE TABLE admin.comp (
    id_comp integer NOT NULL,
    nom_comp character varying(20),
    categorie_comp character varying(30),
    logo_comp character varying(100),
    texte_comp text
);


ALTER TABLE admin.comp OWNER TO postgres;

--
-- TOC entry 203 (class 1259 OID 32846)
-- Name: contact; Type: TABLE; Schema: admin; Owner: postgres
--

CREATE TABLE admin.contact (
    id_contact integer NOT NULL,
    nom_contact character varying(20),
    coordonnees_contact character varying(100),
    nom_personne_contact character varying(20),
    mail_contact character varying(30),
    telephone_contact character varying(15),
    message_contact character varying(200)
);


ALTER TABLE admin.contact OWNER TO postgres;

--
-- TOC entry 198 (class 1259 OID 32819)
-- Name: exp; Type: TABLE; Schema: admin; Owner: postgres
--

CREATE TABLE admin.exp (
    id_exp integer NOT NULL,
    nom_exp character varying(20),
    date_debut_ext date,
    date_fin_exp date,
    domaine_exp character varying(30),
    lieu_exp character varying(30),
    text_exp text
);


ALTER TABLE admin.exp OWNER TO postgres;

--
-- TOC entry 199 (class 1259 OID 32825)
-- Name: form; Type: TABLE; Schema: admin; Owner: postgres
--

CREATE TABLE admin.form (
    id_form integer NOT NULL,
    nom_form character varying(20),
    date_debut_form date,
    date_fin_form date,
    etablissement_form character varying(30),
    diplome_form character varying(20),
    texte_form text
);


ALTER TABLE admin.form OWNER TO postgres;

--
-- TOC entry 202 (class 1259 OID 32840)
-- Name: interet; Type: TABLE; Schema: admin; Owner: postgres
--

CREATE TABLE admin.interet (
    id_interet integer NOT NULL,
    nom_interet character varying(20),
    date_debut_interet date,
    date_fin_interet date,
    categorie_interet character varying(30),
    lieu_interet character varying(30),
    texte_interet text
);


ALTER TABLE admin.interet OWNER TO postgres;

--
-- TOC entry 197 (class 1259 OID 32813)
-- Name: profil; Type: TABLE; Schema: admin; Owner: postgres
--

CREATE TABLE admin.profil (
    id_profil integer NOT NULL,
    nom_profil character varying(20),
    texte_profil text,
    image_profil character varying(100),
    logo_profil character varying(100)
);


ALTER TABLE admin.profil OWNER TO postgres;

--
-- TOC entry 201 (class 1259 OID 32837)
-- Name: projet; Type: TABLE; Schema: admin; Owner: postgres
--

CREATE TABLE admin.projet (
    id_projet integer NOT NULL,
    nom_projet character varying(20),
    date_debut_projet date,
    date_fin_projet date,
    titre_projet character varying(30),
    lieu_projet character varying(30),
    type_projet character varying(30)
);


ALTER TABLE admin.projet OWNER TO postgres;

--
-- TOC entry 2846 (class 0 OID 32849)
-- Dependencies: 204
-- Data for Name: admin; Type: TABLE DATA; Schema: admin; Owner: postgres
--

COPY admin.admin (id_admin, nom_admin, categorie_admo, texte_admin) FROM stdin;
\.


--
-- TOC entry 2842 (class 0 OID 32831)
-- Dependencies: 200
-- Data for Name: comp; Type: TABLE DATA; Schema: admin; Owner: postgres
--

COPY admin.comp (id_comp, nom_comp, categorie_comp, logo_comp, texte_comp) FROM stdin;
\.


--
-- TOC entry 2845 (class 0 OID 32846)
-- Dependencies: 203
-- Data for Name: contact; Type: TABLE DATA; Schema: admin; Owner: postgres
--

COPY admin.contact (id_contact, nom_contact, coordonnees_contact, nom_personne_contact, mail_contact, telephone_contact, message_contact) FROM stdin;
\.


--
-- TOC entry 2840 (class 0 OID 32819)
-- Dependencies: 198
-- Data for Name: exp; Type: TABLE DATA; Schema: admin; Owner: postgres
--

COPY admin.exp (id_exp, nom_exp, date_debut_ext, date_fin_exp, domaine_exp, lieu_exp, text_exp) FROM stdin;
\.


--
-- TOC entry 2841 (class 0 OID 32825)
-- Dependencies: 199
-- Data for Name: form; Type: TABLE DATA; Schema: admin; Owner: postgres
--

COPY admin.form (id_form, nom_form, date_debut_form, date_fin_form, etablissement_form, diplome_form, texte_form) FROM stdin;
\.


--
-- TOC entry 2844 (class 0 OID 32840)
-- Dependencies: 202
-- Data for Name: interet; Type: TABLE DATA; Schema: admin; Owner: postgres
--

COPY admin.interet (id_interet, nom_interet, date_debut_interet, date_fin_interet, categorie_interet, lieu_interet, texte_interet) FROM stdin;
\.


--
-- TOC entry 2839 (class 0 OID 32813)
-- Dependencies: 197
-- Data for Name: profil; Type: TABLE DATA; Schema: admin; Owner: postgres
--

COPY admin.profil (id_profil, nom_profil, texte_profil, image_profil, logo_profil) FROM stdin;
\.


--
-- TOC entry 2843 (class 0 OID 32837)
-- Dependencies: 201
-- Data for Name: projet; Type: TABLE DATA; Schema: admin; Owner: postgres
--

COPY admin.projet (id_projet, nom_projet, date_debut_projet, date_fin_projet, titre_projet, lieu_projet, type_projet) FROM stdin;
\.


-- Completed on 2019-06-07 13:57:45

--
-- PostgreSQL database dump complete
--

