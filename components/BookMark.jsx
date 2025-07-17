const BookMark = ({ r_id, r_title, r_imageurl, r_page, r_rating }) => {

  function modifyCard() {
    window.location.href = `otherPages/viewCard.php?id=${r_id}`;
  }
  
  function getTitleFontSize() {
    const len = r_title.length;
    const max = 40;
    return `${max - (len/2.1)}px`;
  };

  return (
    <div className="bookmark-card" onClick={modifyCard}>
      <p className="bookmark-rating">{r_rating} / 10</p>
      <img
        src={r_imageurl}
        className="bookmark-image"
        onError={(e) => {
            console.log('error on ')
            console.log(r_id);
            if (!e.target.dataset.fallback) {
            e.target.dataset.fallback = 'true'; 
            e.target.src = '../assets/noWifi.jpg'; // Fallback image URL
            }
        }}
        />
      <p
        className="bookmark-title"
        style={{ fontSize: getTitleFontSize() }}
      >
        {r_title}
      </p>
      <p className="bookmark-pagenumber">pg. {r_page}</p>
    </div>
  );
};
