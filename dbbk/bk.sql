PGDMP                         x            PHP2    12.3    12.3                0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false                       0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false                       0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false                       1262    16947    PHP2    DATABASE     �   CREATE DATABASE "PHP2" WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'English_United States.1252' LC_CTYPE = 'English_United States.1252';
    DROP DATABASE "PHP2";
                postgres    false            �            1259    16950    users    TABLE     �   CREATE TABLE public.users (
    id integer NOT NULL,
    username character varying(20),
    password character varying(20),
    fullname character varying(50),
    diachi character varying(50)
);
    DROP TABLE public.users;
       public         heap    postgres    false            �            1259    16948    users_id_seq    SEQUENCE     �   CREATE SEQUENCE public.users_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public          postgres    false    203                       0    0    users_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;
          public          postgres    false    202            
           2604    16953    users id    DEFAULT     d   ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    202    203    203                      0    16950    users 
   TABLE DATA           I   COPY public.users (id, username, password, fullname, diachi) FROM stdin;
    public          postgres    false    203   �
       	           0    0    users_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.users_id_seq', 3, true);
          public          postgres    false    202            �
           2606    16955    users us 
   CONSTRAINT     F   ALTER TABLE ONLY public.users
    ADD CONSTRAINT us PRIMARY KEY (id);
 2   ALTER TABLE ONLY public.users DROP CONSTRAINT us;
       public            postgres    false    203               3   x�3�LL����442615�LΔ<.#���!g�q#��0W� ��     