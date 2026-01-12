FROM php:8.4

#Dossier du container
WORKDIR /app

#Copie du reste du code backend
COPY . .

#Exposition du port utilisé par l'API
EXPOSE 8000

#Commande de démarrage du backend
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]

