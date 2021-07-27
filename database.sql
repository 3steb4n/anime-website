DROP DATABASE IF EXISTS anishboard;

create DATABASE anishboard;

USE anishboard;

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
'12','0','1.png','','0','0','https://youtu.be/-DE3U0DJPcE');

INSERT INTO ANIME VALUES ('2','Tantei wa Mou, Shindeiru.', 'Kimizuka Kimihiko es un imán de crisis. Desde quedar atrapado en la escena de un crimen hasta presenciar accidentalmente un negocio de drogas, los problemas parecen encontrarlo en cada esquina. Por lo tanto, no es de extrañar que su vuelo más bien mundano entre de repente en un estado de emergencia con una necesidad imperiosa de un detective a bordo. Desafortunadamente, su intento de evitar problemas es frustrado por una hermosa chica de cabello plateado que se conoce con el nombre en clave Siesta. Declarándose a sí misma detective, arrastra sin ceremonias a Kimizuka al caso como su asistente. Ese incidente marcó el comienzo de una aventura alrededor del mundo que fue más allá de su imaginación más salvaje. Poniendo sus vidas en juego, los dos derribaron organizaciones criminales, previnieron desastres y salvaron a miles. Pero el telón se cerró para su épico viaje con la prematura muerte de Siesta tres años después. Esta vez, decidido a vivir una vida normal en la preparatoria, Kimizuka pasa un año manteniendo un perfil bajo. Sin embargo, según el destino, una chica con un extraño parecido con Siesta se estrella contra su vida, amenazando con arruinar sus días de paz.',
'12','0','2.png','','0','0','https://www.youtube.com/watch?v=2H98cQoiJqY');

INSERT INTO ANIME VALUES ('3','Seirei Gensouki','Su vida pasada y su vida actual se cruzan: ¡un chico con recuerdos de dos vidas se enfrenta a su destino! Después de que su madre fuera asesinada siendo pequeño, el huérfano Rio luchó con todas sus fuerzas para sobrevivir en los barrios bajos. Un día se despierta con los recuerdos de Haruto Amakwa, quien murió en un accidente mientras soñaba con reunirse con su amigo de la infancia, y Rio se da cuenta de que se ha reencarnado en un mundo de espadas y brujería. No solo eso, sino que, tras ayudar a detener un intento de secuestro de una princesa con la que se tropezó, acaba inscrito en una famosa escuela donde se reúnen los hijos de la nobleza… Rio intentará ascender desde lo más bajo de una sociedad jerarquizada y vivirá nuevos encuentros y despedidas mientras lucha por superar el destino.',
'12','0','3.png','','0','0','https://www.youtube.com/watch?v=r_XhD_4ly0Q');

INSERT INTO ANIME VALUES ('4','Night Head 2041','Night Head 2041 es una serie anime que sigue la historia de los hermanos Kirhara que, desde muy jóvenes, fueron encarcelados en una instalación científica debido al surgimiento de sus poderes sobrenaturales. Pero éstos consiguen escapar tras sobrepasar la barrera que les impedía usar sus poderes. Tras ellos se encuentran los hermanos Kuroki que intentarán atraparlos a toda costa.',
'12','0','4.png','','0','0','https://www.youtube.com/watch?v=ljWlh6lY3_g');