--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.19
-- Dumped by pg_dump version 9.6.19

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: candidate-back; Type: DATABASE; Schema: -; Owner: candidate-back
--

CREATE DATABASE "candidate-back" WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'C.UTF-8' LC_CTYPE = 'C.UTF-8';


ALTER DATABASE "candidate-back" OWNER TO "candidate-back";

\connect -reuse-previous=on "dbname='candidate-back'"

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: candidate; Type: TABLE; Schema: public; Owner: candidate-back
--

CREATE TABLE public.candidate (
    id integer NOT NULL,
    created_at timestamp(0) without time zone NOT NULL,
    updated_at timestamp(0) without time zone DEFAULT NULL::timestamp without time zone,
    jobname character varying(255) NOT NULL,
    gender character varying(255) NOT NULL,
    firstname character varying(255) NOT NULL,
    lastname character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    zip_code character varying(255) DEFAULT NULL::character varying,
    city character varying(255) DEFAULT NULL::character varying,
    country character varying(255) DEFAULT NULL::character varying,
    birthdate date,
    twitter_url text NOT NULL,
    linkedin_url text NOT NULL,
    github_url text NOT NULL
);


ALTER TABLE public.candidate OWNER TO "candidate-back";

--
-- Name: candidate_competence; Type: TABLE; Schema: public; Owner: candidate-back
--

CREATE TABLE public.candidate_competence (
    id integer NOT NULL,
    candidate_id integer,
    competence_id integer,
    isoncv boolean,
    level integer NOT NULL
);


ALTER TABLE public.candidate_competence OWNER TO "candidate-back";

--
-- Name: candidate_competence_id_seq; Type: SEQUENCE; Schema: public; Owner: candidate-back
--

CREATE SEQUENCE public.candidate_competence_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.candidate_competence_id_seq OWNER TO "candidate-back";

--
-- Name: candidate_id_seq; Type: SEQUENCE; Schema: public; Owner: candidate-back
--

CREATE SEQUENCE public.candidate_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.candidate_id_seq OWNER TO "candidate-back";

--
-- Name: competence; Type: TABLE; Schema: public; Owner: candidate-back
--

CREATE TABLE public.competence (
    id integer NOT NULL,
    competence_category_id integer,
    name character varying(255) NOT NULL,
    is_legacy boolean
);


ALTER TABLE public.competence OWNER TO "candidate-back";

--
-- Name: competence_category; Type: TABLE; Schema: public; Owner: candidate-back
--

CREATE TABLE public.competence_category (
    id integer NOT NULL,
    ispublished boolean,
    showorder integer NOT NULL
);


ALTER TABLE public.competence_category OWNER TO "candidate-back";

--
-- Name: competence_category_id_seq; Type: SEQUENCE; Schema: public; Owner: candidate-back
--

CREATE SEQUENCE public.competence_category_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.competence_category_id_seq OWNER TO "candidate-back";

--
-- Name: competence_id_seq; Type: SEQUENCE; Schema: public; Owner: candidate-back
--

CREATE SEQUENCE public.competence_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.competence_id_seq OWNER TO "candidate-back";

--
-- Name: diploma; Type: TABLE; Schema: public; Owner: candidate-back
--

CREATE TABLE public.diploma (
    id integer NOT NULL,
    candidate_id integer,
    name character varying(255) NOT NULL,
    date timestamp(0) without time zone NOT NULL,
    school character varying(255) NOT NULL
);


ALTER TABLE public.diploma OWNER TO "candidate-back";

--
-- Name: diploma_id_seq; Type: SEQUENCE; Schema: public; Owner: candidate-back
--

CREATE SEQUENCE public.diploma_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.diploma_id_seq OWNER TO "candidate-back";

--
-- Name: formation; Type: TABLE; Schema: public; Owner: candidate-back
--

CREATE TABLE public.formation (
    id integer NOT NULL,
    candidate_id integer,
    name character varying(255) NOT NULL,
    school_name character varying(255) NOT NULL,
    date_begin timestamp(0) without time zone NOT NULL,
    date_end date NOT NULL,
    description character varying(255) DEFAULT NULL::character varying
);


ALTER TABLE public.formation OWNER TO "candidate-back";

--
-- Name: formation_id_seq; Type: SEQUENCE; Schema: public; Owner: candidate-back
--

CREATE SEQUENCE public.formation_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.formation_id_seq OWNER TO "candidate-back";

--
-- Name: job_experience; Type: TABLE; Schema: public; Owner: candidate-back
--

CREATE TABLE public.job_experience (
    id integer NOT NULL,
    candidate_id integer,
    company_name character varying(255) NOT NULL,
    date_begin date NOT NULL,
    date_end date NOT NULL,
    description text,
    contract character varying(255) DEFAULT NULL::character varying
);


ALTER TABLE public.job_experience OWNER TO "candidate-back";

--
-- Name: job_experience_id_seq; Type: SEQUENCE; Schema: public; Owner: candidate-back
--

CREATE SEQUENCE public.job_experience_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.job_experience_id_seq OWNER TO "candidate-back";

--
-- Name: project; Type: TABLE; Schema: public; Owner: candidate-back
--

CREATE TABLE public.project (
    id integer NOT NULL,
    job_experience_id integer,
    begin_at date NOT NULL,
    end_at date NOT NULL,
    name character varying(255) NOT NULL,
    domain_intervention text,
    technical_environment text,
    description text
);


ALTER TABLE public.project OWNER TO "candidate-back";

--
-- Name: project_id_seq; Type: SEQUENCE; Schema: public; Owner: candidate-back
--

CREATE SEQUENCE public.project_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.project_id_seq OWNER TO "candidate-back";

--
-- Name: realisation; Type: TABLE; Schema: public; Owner: candidate-back
--

CREATE TABLE public.realisation (
    id integer NOT NULL,
    candidate_id integer,
    title character varying(255) NOT NULL,
    date timestamp(0) without time zone NOT NULL,
    place character varying(255) DEFAULT NULL::character varying,
    description text,
    tools character varying(255) DEFAULT NULL::character varying,
    system character varying(255) DEFAULT NULL::character varying,
    hosting character varying(255) DEFAULT NULL::character varying,
    is_published boolean,
    url character varying(255) DEFAULT NULL::character varying
);


ALTER TABLE public.realisation OWNER TO "candidate-back";

--
-- Name: realisation_id_seq; Type: SEQUENCE; Schema: public; Owner: candidate-back
--

CREATE SEQUENCE public.realisation_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.realisation_id_seq OWNER TO "candidate-back";

--
-- Data for Name: candidate; Type: TABLE DATA; Schema: public; Owner: candidate-back
--

COPY public.candidate (id, created_at, updated_at, jobname, gender, firstname, lastname, email, zip_code, city, country, birthdate, twitter_url, linkedin_url, github_url) FROM stdin;
\.


--
-- Data for Name: candidate_competence; Type: TABLE DATA; Schema: public; Owner: candidate-back
--

COPY public.candidate_competence (id, candidate_id, competence_id, isoncv, level) FROM stdin;
\.


--
-- Name: candidate_competence_id_seq; Type: SEQUENCE SET; Schema: public; Owner: candidate-back
--

SELECT pg_catalog.setval('public.candidate_competence_id_seq', 1, false);


--
-- Name: candidate_id_seq; Type: SEQUENCE SET; Schema: public; Owner: candidate-back
--

SELECT pg_catalog.setval('public.candidate_id_seq', 1, false);


--
-- Data for Name: competence; Type: TABLE DATA; Schema: public; Owner: candidate-back
--

COPY public.competence (id, competence_category_id, name, is_legacy) FROM stdin;
\.


--
-- Data for Name: competence_category; Type: TABLE DATA; Schema: public; Owner: candidate-back
--

COPY public.competence_category (id, ispublished, showorder) FROM stdin;
\.


--
-- Name: competence_category_id_seq; Type: SEQUENCE SET; Schema: public; Owner: candidate-back
--

SELECT pg_catalog.setval('public.competence_category_id_seq', 1, false);


--
-- Name: competence_id_seq; Type: SEQUENCE SET; Schema: public; Owner: candidate-back
--

SELECT pg_catalog.setval('public.competence_id_seq', 1, false);


--
-- Data for Name: diploma; Type: TABLE DATA; Schema: public; Owner: candidate-back
--

COPY public.diploma (id, candidate_id, name, date, school) FROM stdin;
\.


--
-- Name: diploma_id_seq; Type: SEQUENCE SET; Schema: public; Owner: candidate-back
--

SELECT pg_catalog.setval('public.diploma_id_seq', 1, false);


--
-- Data for Name: formation; Type: TABLE DATA; Schema: public; Owner: candidate-back
--

COPY public.formation (id, candidate_id, name, school_name, date_begin, date_end, description) FROM stdin;
\.


--
-- Name: formation_id_seq; Type: SEQUENCE SET; Schema: public; Owner: candidate-back
--

SELECT pg_catalog.setval('public.formation_id_seq', 1, false);


--
-- Data for Name: job_experience; Type: TABLE DATA; Schema: public; Owner: candidate-back
--

COPY public.job_experience (id, candidate_id, company_name, date_begin, date_end, description, contract) FROM stdin;
\.


--
-- Name: job_experience_id_seq; Type: SEQUENCE SET; Schema: public; Owner: candidate-back
--

SELECT pg_catalog.setval('public.job_experience_id_seq', 1, false);


--
-- Data for Name: project; Type: TABLE DATA; Schema: public; Owner: candidate-back
--

COPY public.project (id, job_experience_id, begin_at, end_at, name, domain_intervention, technical_environment, description) FROM stdin;
\.


--
-- Name: project_id_seq; Type: SEQUENCE SET; Schema: public; Owner: candidate-back
--

SELECT pg_catalog.setval('public.project_id_seq', 1, false);


--
-- Data for Name: realisation; Type: TABLE DATA; Schema: public; Owner: candidate-back
--

COPY public.realisation (id, candidate_id, title, date, place, description, tools, system, hosting, is_published, url) FROM stdin;
\.


--
-- Name: realisation_id_seq; Type: SEQUENCE SET; Schema: public; Owner: candidate-back
--

SELECT pg_catalog.setval('public.realisation_id_seq', 1, false);


--
-- Name: candidate_competence candidate_competence_pkey; Type: CONSTRAINT; Schema: public; Owner: candidate-back
--

ALTER TABLE ONLY public.candidate_competence
    ADD CONSTRAINT candidate_competence_pkey PRIMARY KEY (id);


--
-- Name: candidate candidate_pkey; Type: CONSTRAINT; Schema: public; Owner: candidate-back
--

ALTER TABLE ONLY public.candidate
    ADD CONSTRAINT candidate_pkey PRIMARY KEY (id);


--
-- Name: competence_category competence_category_pkey; Type: CONSTRAINT; Schema: public; Owner: candidate-back
--

ALTER TABLE ONLY public.competence_category
    ADD CONSTRAINT competence_category_pkey PRIMARY KEY (id);


--
-- Name: competence competence_pkey; Type: CONSTRAINT; Schema: public; Owner: candidate-back
--

ALTER TABLE ONLY public.competence
    ADD CONSTRAINT competence_pkey PRIMARY KEY (id);


--
-- Name: diploma diploma_pkey; Type: CONSTRAINT; Schema: public; Owner: candidate-back
--

ALTER TABLE ONLY public.diploma
    ADD CONSTRAINT diploma_pkey PRIMARY KEY (id);


--
-- Name: formation formation_pkey; Type: CONSTRAINT; Schema: public; Owner: candidate-back
--

ALTER TABLE ONLY public.formation
    ADD CONSTRAINT formation_pkey PRIMARY KEY (id);


--
-- Name: job_experience job_experience_pkey; Type: CONSTRAINT; Schema: public; Owner: candidate-back
--

ALTER TABLE ONLY public.job_experience
    ADD CONSTRAINT job_experience_pkey PRIMARY KEY (id);


--
-- Name: project project_pkey; Type: CONSTRAINT; Schema: public; Owner: candidate-back
--

ALTER TABLE ONLY public.project
    ADD CONSTRAINT project_pkey PRIMARY KEY (id);


--
-- Name: realisation realisation_pkey; Type: CONSTRAINT; Schema: public; Owner: candidate-back
--

ALTER TABLE ONLY public.realisation
    ADD CONSTRAINT realisation_pkey PRIMARY KEY (id);


--
-- Name: idx_2fb3d0eeed3750eb; Type: INDEX; Schema: public; Owner: candidate-back
--

CREATE INDEX idx_2fb3d0eeed3750eb ON public.project USING btree (job_experience_id);


--
-- Name: idx_404021bf91bd8781; Type: INDEX; Schema: public; Owner: candidate-back
--

CREATE INDEX idx_404021bf91bd8781 ON public.formation USING btree (candidate_id);


--
-- Name: idx_6fe7511e91bd8781; Type: INDEX; Schema: public; Owner: candidate-back
--

CREATE INDEX idx_6fe7511e91bd8781 ON public.job_experience USING btree (candidate_id);


--
-- Name: idx_94d4687f31b17ae5; Type: INDEX; Schema: public; Owner: candidate-back
--

CREATE INDEX idx_94d4687f31b17ae5 ON public.competence USING btree (competence_category_id);


--
-- Name: idx_a6137f4115761dab; Type: INDEX; Schema: public; Owner: candidate-back
--

CREATE INDEX idx_a6137f4115761dab ON public.candidate_competence USING btree (competence_id);


--
-- Name: idx_a6137f4191bd8781; Type: INDEX; Schema: public; Owner: candidate-back
--

CREATE INDEX idx_a6137f4191bd8781 ON public.candidate_competence USING btree (candidate_id);


--
-- Name: idx_eaa5610e91bd8781; Type: INDEX; Schema: public; Owner: candidate-back
--

CREATE INDEX idx_eaa5610e91bd8781 ON public.realisation USING btree (candidate_id);


--
-- Name: idx_ec21895791bd8781; Type: INDEX; Schema: public; Owner: candidate-back
--

CREATE INDEX idx_ec21895791bd8781 ON public.diploma USING btree (candidate_id);


--
-- Name: project fk_2fb3d0eeed3750eb; Type: FK CONSTRAINT; Schema: public; Owner: candidate-back
--

ALTER TABLE ONLY public.project
    ADD CONSTRAINT fk_2fb3d0eeed3750eb FOREIGN KEY (job_experience_id) REFERENCES public.job_experience(id);


--
-- Name: formation fk_404021bf91bd8781; Type: FK CONSTRAINT; Schema: public; Owner: candidate-back
--

ALTER TABLE ONLY public.formation
    ADD CONSTRAINT fk_404021bf91bd8781 FOREIGN KEY (candidate_id) REFERENCES public.candidate(id);


--
-- Name: job_experience fk_6fe7511e91bd8781; Type: FK CONSTRAINT; Schema: public; Owner: candidate-back
--

ALTER TABLE ONLY public.job_experience
    ADD CONSTRAINT fk_6fe7511e91bd8781 FOREIGN KEY (candidate_id) REFERENCES public.candidate(id);


--
-- Name: competence fk_94d4687f31b17ae5; Type: FK CONSTRAINT; Schema: public; Owner: candidate-back
--

ALTER TABLE ONLY public.competence
    ADD CONSTRAINT fk_94d4687f31b17ae5 FOREIGN KEY (competence_category_id) REFERENCES public.competence_category(id);


--
-- Name: candidate_competence fk_a6137f4115761dab; Type: FK CONSTRAINT; Schema: public; Owner: candidate-back
--

ALTER TABLE ONLY public.candidate_competence
    ADD CONSTRAINT fk_a6137f4115761dab FOREIGN KEY (competence_id) REFERENCES public.competence(id);


--
-- Name: candidate_competence fk_a6137f4191bd8781; Type: FK CONSTRAINT; Schema: public; Owner: candidate-back
--

ALTER TABLE ONLY public.candidate_competence
    ADD CONSTRAINT fk_a6137f4191bd8781 FOREIGN KEY (candidate_id) REFERENCES public.candidate(id);


--
-- Name: realisation fk_eaa5610e91bd8781; Type: FK CONSTRAINT; Schema: public; Owner: candidate-back
--

ALTER TABLE ONLY public.realisation
    ADD CONSTRAINT fk_eaa5610e91bd8781 FOREIGN KEY (candidate_id) REFERENCES public.candidate(id);


--
-- Name: diploma fk_ec21895791bd8781; Type: FK CONSTRAINT; Schema: public; Owner: candidate-back
--

ALTER TABLE ONLY public.diploma
    ADD CONSTRAINT fk_ec21895791bd8781 FOREIGN KEY (candidate_id) REFERENCES public.candidate(id);


--
-- PostgreSQL database dump complete
--

