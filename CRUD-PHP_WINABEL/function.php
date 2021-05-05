
<?php 
class ToDo {

    private $server ="mysql:host=localhost;dbname=to-do-list";
    private $user = "root";
    private $password = "";
    private $options = array(
        PDO::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    );
    protected $connection;

    public function openConnection(){
        try {
            $this->con = new PDO (
                $this->server,
                $this->user,
                $this->password,   
                $this->options
            );
            
            return $this->con;
        } catch (PDOException $error) {
            echo "Error connection: ".$error->getMessage();
        }
    }

    function add(){

        if(isset($_POST['create'])){
            $addTask=$_POST['inputList'];
            $connection = $this->openConnection();
            $query = $connection->prepare( "INSERT INTO `list` (`list-to-do`) VALUES ('$addTask') ");  
            $query->execute([$addTask]);
        }
    }
    // function delete(){
        
    //     $connection = $this->openConnection();
    //     $query = $connection->prepare("DELETE FROM list WHERE id = '$id'");
    // }


    // function fetchData(){
       
    //         $connection = $this->openConnection();
    //         $query = $connection->prepare( "SELECT * FROM `list`");  
    //         $query->execute();
    //         $getData = $query->fetchAll();
          
    // }

    function update($id){
        if (isset($_POST['edit'])){
            echo "diri";
            $editTask = $_POST['editList'];
            $connection = $this->openConnection();
            $query = $connection->prepare("SELECT FROM list WHERE id = '$id'");
            $result =$this->connection->query($query);
            if ($result->num_rows>0){
                $rows = $result->fetch-assoc();
                return $row;
            }else{
                echo "The said data is not found ";
            }

        }
        
    }

     
}
    $todo= new ToDo;

 
?>