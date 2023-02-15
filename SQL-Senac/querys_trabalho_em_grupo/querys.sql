SELECT games_details.PLAYER_NAME AS nome, games_details.PTS AS pontos, games.GAME_DATE_EST AS data_, games.SEASON AS temporada
FROM games_details
INNER JOIN games
ON games_details.GAME_ID = games.GAME_ID
;
