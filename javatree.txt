import java.io.File;
import java.io.FileInputStream;
import java.util.ArrayList;
import java.util.Iterator;
import java.util.List;

import org.apache.poi.hssf.usermodel.HSSFSheet;
import org.apache.poi.hssf.usermodel.HSSFWorkbook;
import org.apache.poi.ss.usermodel.Cell;
import org.apache.poi.ss.usermodel.Row;
import org.json.JSONObject;
public class ExcelRead {
	private static final int NUM_COLUMNS = 4;

    public static void main(String[] args)
    {  
        try
        {
            FileInputStream file = new FileInputStream(new File("D://sample.xls"));

            HSSFWorkbook workbook = new HSSFWorkbook(file);
            HSSFSheet sheet = workbook.getSheetAt(0);

            // Use a column marker to save the 'farthest' column so far
            int currColMarker = -1;
            List<String> list = new ArrayList<>();

            //Iterate through each rows one by one
            Iterator<Row> rowIterator = sheet.iterator();
            
           
            
            while (rowIterator.hasNext()) 
            {
                Row row = rowIterator.next();

                for(int currCol = 0; currCol < NUM_COLUMNS; currCol++)
                {
                    Cell cell = row.getCell(currCol);
                    if(cell == null)
                        continue;

                    if(cell.getCellType() == Cell.CELL_TYPE_STRING) {

                        if(currCol > currColMarker) {

                            // A farther column, simply append and
                            // update column marker
                            currColMarker = currCol;

                            list.add(cell.getStringCellValue());
                        }
                        else if (currCol == currColMarker) {

                            // At same level as column marker
                            // Remove old value at same level, before appending
                            list.remove(list.size() - 1);
                            list.add(cell.getStringCellValue());
                        }
                        else {

                            // At a 'nearer' column, remove those values beyond
                            // this level before appending
                            currColMarker = currCol;

                            list = list.subList(0, currCol);
                            list.add(cell.getStringCellValue());
                        }
                    }
                }

                // For displaying the current contents
                StringBuffer sb = new StringBuffer();
                
                for(String s : list) {
                    if(sb.length() != 0) {
                        sb.append("-->");
                    }
                    sb.append(s);
                
                }
                System.out.println(sb.toString());
                
               
            }
            
           
            file.close();
        } 
        catch (Exception e) 
        {
            e.printStackTrace();
        }
    }
}
