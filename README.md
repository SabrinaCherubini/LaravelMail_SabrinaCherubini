ESERCIZIO INVIO MAIL
- Realizzare un progetto laravel con una Homepage, pagina di visualizzazione prodotti (e pagina di dettaglio prodotto) ed una pagina Contattaci
- In questa ultima vista dovra' esserci un form che consenta ad un utente di inviarci una mail come visto a lezione
- Ricordate sempre di utilizzare componenti e bundling degli assets
- Terminato l'esercizio, clonare il progetto dei propri buddies e svolgere le implementazioni necessarie per far si' che il progetto sia funzionale sul nostro pc


Utilizzo di un form:

1 Lavorare sui tag input del form agiungendo ad ogni input l'attributo name
2 AGGIUNGERE IL CSRF TOKEN: @csrf
3 Creare la rotta di tipo post che ci portera' alla funzione che gestira' la logica nel controller
4 Nella funzione del Controller ricordarsi di aggiungere come parametro formale un oggetto di tipo Request attravertso la 5 Dependency Injection : (Request $request)
6 Nel form come method del tag mettere POST mentre nella action richiamare la rotta dedicata
