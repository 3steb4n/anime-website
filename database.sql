DROP DATABASE IF EXISTS anishboard;

create DATABASE anishboard;

USE anishboard;

DROP TABLE IF EXISTS ANIME;

CREATE TABLE ANIME(
    ID_ANIME INT NOT NULL,
    NOMBRE_ANIME VARCHAR (200) NOT NULL,
    SINOPSIS_ANIME TEXT NOT NULL,
    NO_CAP INT NOT NULL,
    NO_CALIFICACION INT NOT NULL,
    IMG_ANIME TEXT NOT NULL,
    BANNER_ANIME TEXT NOT NULL,
    CALI_POS INT NOT NULL,
    CALI_NEG INT NOT NULL,
    URL_TRAILER text,
    PRIMARY KEY (ID_ANIME)
);

INSERT INTO ANIME VALUES ('1','Genjitsu Shugi Yuusha no Oukoku Saikenki','“¡Oh, héroe!”, qué frase tan cliché. Kazuya Souma fue invocado a otro mundo y su aventura… nunca comenzó. Después de que presenta su plan para fortalecer la economía del país y sus fuerzas armadas, el rey le cede el trono y Souma ahora dirige una nación. Lo que es más, ahora se ha comprometido con la hija del antiguo rey. Para lograr devolver a este país a su antigua gloria, Souma convoca a las personas más sabias y agraciadas del territorio, solo para que cinco personas se presenten ante él, ¿Cuáles serán los talentos que estas personas poseen? ¿Qué camino tomará este realista héroe para salvar el país de la miseria? ¡Comienza una aventura administrativa de un héroe invocado a otro mundo!',
'12','0','1.png','','0','0','https://youtube.com/embed/-DE3U0DJPcE');

INSERT INTO ANIME VALUES ('2','Tantei wa Mou, Shindeiru.', 'Kimizuka Kimihiko es un imán de crisis. Desde quedar atrapado en la escena de un crimen hasta presenciar accidentalmente un negocio de drogas, los problemas parecen encontrarlo en cada esquina. Por lo tanto, no es de extrañar que su vuelo más bien mundano entre de repente en un estado de emergencia con una necesidad imperiosa de un detective a bordo. Desafortunadamente, su intento de evitar problemas es frustrado por una hermosa chica de cabello plateado que se conoce con el nombre en clave Siesta. Declarándose a sí misma detective, arrastra sin ceremonias a Kimizuka al caso como su asistente. Ese incidente marcó el comienzo de una aventura alrededor del mundo que fue más allá de su imaginación más salvaje. Poniendo sus vidas en juego, los dos derribaron organizaciones criminales, previnieron desastres y salvaron a miles. Pero el telón se cerró para su épico viaje con la prematura muerte de Siesta tres años después. Esta vez, decidido a vivir una vida normal en la preparatoria, Kimizuka pasa un año manteniendo un perfil bajo. Sin embargo, según el destino, una chica con un extraño parecido con Siesta se estrella contra su vida, amenazando con arruinar sus días de paz.',
'12','0','2.png','','0','0','https://www.youtube.com/embed/2H98cQoiJqY');

INSERT INTO ANIME VALUES ('3','Seirei Gensouki','Su vida pasada y su vida actual se cruzan: ¡un chico con recuerdos de dos vidas se enfrenta a su destino! Después de que su madre fuera asesinada siendo pequeño, el huérfano Rio luchó con todas sus fuerzas para sobrevivir en los barrios bajos. Un día se despierta con los recuerdos de Haruto Amakwa, quien murió en un accidente mientras soñaba con reunirse con su amigo de la infancia, y Rio se da cuenta de que se ha reencarnado en un mundo de espadas y brujería. No solo eso, sino que, tras ayudar a detener un intento de secuestro de una princesa con la que se tropezó, acaba inscrito en una famosa escuela donde se reúnen los hijos de la nobleza… Rio intentará ascender desde lo más bajo de una sociedad jerarquizada y vivirá nuevos encuentros y despedidas mientras lucha por superar el destino.',
'12','0','3.png','','0','0','https://www.youtube.com/embed/r_XhD_4ly0Q');

INSERT INTO ANIME VALUES ('4','Night Head 2041','Night Head 2041 es una serie anime que sigue la historia de los hermanos Kirhara que, desde muy jóvenes, fueron encarcelados en una instalación científica debido al surgimiento de sus poderes sobrenaturales. Pero éstos consiguen escapar tras sobrepasar la barrera que les impedía usar sus poderes. Tras ellos se encuentran los hermanos Kuroki que intentarán atraparlos a toda costa.',
'12','0','4.png','','0','0','https://www.youtube.com/embed/ljWlh6lY3_g');


INSERT INTO ANIME VALUES ('5','Kageki Shoujo!!','Las chicas que asisten a la academia de artes Kouka interpretan todas las partes de un teatro musical, sean mujeres u hombres. Ai Narada es una ex-idol hastiada que interpreta papeles femeninos mientras que su compañera, Sarasa Watanabe, es una chica proveniente de una zona rural que interpreta papeles masculinos. Desde la escuela hasta el escenario y el resto de sus vidas, no hay desafío que estas chicas no puedan enfrentar con su pasión por la interpretación.',
'12','0','5.png','','0','0','https://www.youtube.com/embed/hBvt70n-lig');

INSERT INTO ANIME VALUES ('6','Deatte 5-byou de Battle','Era solo una mañana normal… Akira Shiroyanagi, un estudiante de preparatoria que ama los videojuegos y los dulces, de repente ha sido arrastrado al campo de batalla por parte de una misteriosa chica que se hace llamar Mion. A los participantes se les dice que fueron borrados del registro familiar, involucrados en un experimento y asignados ciertos poderes. Akira está decidido entonces a ganar el juego con sus nuevos poderes y destruir a todos los que lo metieron en este gran problema. Armado con un poder que nadie esperaría y sus habilidades cerebrales de estratega, ¡comienza el nuevo periodo de batalla de inteligencia!',
'12','0','6.png','','0','0','https://www.youtube.com/embed/a-rZg1ELWtI');




INSERT INTO ANIME VALUES ('7','Cheat Kusushi no Slow Life: Isekai ni Tsukurou Drugstore','La historia sigue a Reiji, un hombre frustrado con su vida actual y su interminable trabajo que un día termina transportado a un mundo alterno. La habilidad que adquiere allí es crear medicina. Decepcionado por no tener una habilidad de combate, descubre que sus pociones son en realidad bastante potentes, por lo que decide abrir una farmacia con el dinero que acumuló.',
'12','0','7.png','','0','0','https://www.youtube.com/embed/9HfmLUNTwNI');

INSERT INTO ANIME VALUES ('8','Shinigami Bocchan to Kuro Maid','Maldecido por una bruja cuando era niño, un joven duque obtuvo el poder no deseado de matar a todos los seres vivos que toca. Obligado a mudarse lejos de su familia y a una gran mansión en lo profundo del bosque, el duque es tratado como si no existiera y sus compañeros lo rechazan continuamente. Sin embargo, no está completamente solo. Rob y Alice, su mayordomo y maid, siempre están a su lado. A Alice le encanta burlarse de él y, a medida que su relación crece, el duque se propone liberarse de su maldición mortal. Por supuesto, va a necesitar ayuda, ¿y quién mejor para hacerlo que los diversos habitantes de lo sobrenatural?',
'12','0','8.png','','0','0','https://www.youtube.com/embed/Kh_anYPPeuU');

INSERT INTO ANIME VALUES ('9','Bokutachi no Remake','Hashiba Kyouya es un desarrollador de 28 años. Con su empresa quebrada y él, en consecuencia, perdiendo su empleo, regresa a su ciudad natal. Al observar el éxito de los creadores de su época, se arrepiente de las decisiones de su vida mientras yacía angustiado en su cama. Sin embargo, cuando Kyouya se despierta al día siguiente, descubre que ha viajado diez años hacia el pasado, antes de ingresar a la universidad. ¿Podrá finalmente hacer la cosas bien? Esta es una historia sobre una persona que fracasó en sus sueños, pero que ha conseguido una segunda oportunidad.',
'12','0','9.png','','0','0','https://www.youtube.com/embed/s6QlmN6g21o');

INSERT INTO ANIME VALUES ('10','Mahouka Koukou no Yuutousei','Ha pasado un siglo desde que la magia, magia real, verdadera, material de leyendas; ha vuelto al mundo. Es primavera, la temporada de nuevos comienzos, y una nueva clase de estudiantes está a punto de comenzar sus estudios en la Primera Preparatoria de la Academia Nacional de Magia, apodada también como la Primera Preparatoria Mágica.',
'12','0','10.png','','0','0','https://www.youtube.com/embed/XK_FkBueMN8');

INSERT INTO ANIME VALUES ('11','Mairimashita! Iruma-kun 2nd Season','Segunda temporada de Mairimashita! Iruma-kun.',
'24','0','11.png','','0','0','https://www.youtube.com/embed/pFsrZNc_t-M');

INSERT INTO ANIME VALUES ('12','Kobayashi-san Chi no Maid Dragon S','La señorita Kobayashi es la oficinista promedio que vive una vida aburrida, sola en su pequeño departamento, hasta que salva la vida de una dragona en apuros. La dragona, llamada Tohru, tiene la capacidad de transformarse mágicamente en una adorable chica humana (¡aunque con cuernos y cola larga!), que hará cualquier cosa para pagar su deuda de gratitud, ya sea que le guste o no a la señorita Kobayashi. Con un dragón muy persistente y amoroso como compañero de habitación, nada es fácil, ¡y la vida normal de la señorita Kobayashi está a punto de terminar!',
'12','0','12.png','','0','0','https://www.youtube.com/embed/YVAnyHveq6E');

INSERT INTO ANIME VALUES ('13','Kanojo mo Kanojo','Después de albergar un amor no correspondido por varios años, Naoya Mukai finalmente obtiene una cita con su amiga de la infancia, Saki Saki. Sin embargo, justo cuando intenta comprometerse con esta relación, recibe una abrupta confesión por parte de Nagisa Minase. Al principio, Naoya intenta rechazarla pero pronto se ve abrumado por los sentimientos de no querer herirla. Tratando de evitar traicionar la confianza de su novia en él, Naoya piensa en una “solución” para hacer felices a ambas: salir con las dos. Naturalmente, Saki rechaza la idea, pero a través de la persistencia de Naoya y Nagisa, termina aceptando. Con esto, comienza un romance de tres integrantes entre Naoya, su novia y su otra novia, que de entrada ya tienen una relación que se desvía de la norma social.',
'12','0','13.png','','0','0','https://www.youtube.com/embed/rK4SdJg3KpI');

INSERT INTO ANIME VALUES ('14','Tokyo Revengers','Mientras miraba las noticias, Takemichi Hanagaki se entera de que su novia de secundaria, Hinata Tachibana, ha muerto. La única chica que alguna vez se fijó en él fue asesinada por un grupo de criminales conocidos como la Banda Tokyo Manji. Takemichi vive en un viejo departamento con delgadas paredes, y en su trabajo, su jefa seis años menor que él lo trata como basura. Para rematar, es un completo virgen… En la cúspide de la miseria de su vida, de repente vuelve en el tiempo doce años a sus días de secundaria. Para salvar a Hinata y cambiar el curso del tiempo, ¡el alguna vez inútil trabajador de medio tiempo Takemichi deberá buscar volverse el líder de la banda criminal más tenebrosa de Tokio!',
'24','0','14.png','','0','0','https://www.youtube.com/embed/idlLFNNpZiI');