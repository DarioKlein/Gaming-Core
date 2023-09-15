CREATE TABLE comentarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(255),
    comentario TEXT,
    data_publicacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    likes INT DEFAULT 0,
    dislikes INT DEFAULT 0,
    imagemLike VARCHAR(255),
    imagemDeslike VARCHAR(255),
    id_jogo INT
) CHARACTER SET utf8 COLLATE utf8_unicode_ci;


CREATE TABLE user_actions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255),
    comment_id INT,
    action ENUM('like', 'deslike'),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    imagemLiked VARCHAR(255),
    imagemDesliked VARCHAR(255)
);
