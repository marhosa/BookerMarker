


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>BOOKERMARKER</title>

    <!-- css files importingg -->
    <link rel="stylesheet" href="styles/styles.css?v=2">
    <link rel="stylesheet" href="styles/BookMark.css?v=2">
    <link rel="stylesheet" href="styles/mainTextonTop.css?v=2">
    <link rel="stylesheet" href="styles/filters.css?v=2">


</head>
<body>

  

  <!-- react files for it to work without installing react  -->
  <script src="react/react.js"></script>
  <script src="react/react-dom.js"></script>
  <script src="react/babel.js"></script>

  <div class="mainTextonTop">
    <p class="mainTitle">BookerMarker</p>
    <p class="mainDesc">a minimalistic personal bookmarking web-app</p>
  </div>

  <!-- main root react -->
  <div id="root"></div>

  <!--React Components -->
  <script type="text/babel" src="components/BookmarksViewer.jsx?v=1"></script>
  <script type="text/babel" src="components/BookMark.jsx?v=1"></script>
  <script type="text/babel" src="components/AddButton.jsx?v=1"></script>
  <script type="text/babel" src="components/App.jsx?v=1"></script>
  <script type="text/babel" src="components/DatabaseError.jsx?v=1"></script>
  <script type="text/babel" src="components/Filter.jsx?v=1"></script>
  <script type="text/babel" src="components/Loading.jsx?v=1"></script>

<!-- React Renderer --> 
<script type="text/babel">

  const loadData = async () => {
    
      const MainRoot = document.getElementById("root");
      ReactDOM.createRoot(MainRoot).render(<Loading />);

      console.log('fetching phpScripts')
      const res = await fetch("phpScripts/getBookmarks.php");
     
      try{
        //this fails if database fails.
        console.log('converting to data')
        const data = await res.json();
        console.log('renderer triggered')

        ReactDOM.createRoot(MainRoot).render(<App 
        bookmarks={data} 
        />);
        
      }
      catch{
        //Database has errors so this triggers and shows warning instead.
        
        ReactDOM.createRoot(MainRoot).render(<DatabaseError />);
      }
    

  };

  loadData();
</script>
</body>
</html>
