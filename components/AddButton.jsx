const AddButton = () => {
    const handleClick = () => {
        window.location.href = "otherPages/addBookmark.php"; 
    };
    return (
    <button 
        onClick={handleClick} 
        className="AddButton-Button"
    >ADD</button>
    );
    
};
