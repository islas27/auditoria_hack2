package conversor_obra_publica;

import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.File;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.io.InputStream;
import java.io.OutputStream;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author jonathan
 */
public class Conversor_obra_publica {

    public static void main(String[] args) {
        String TABLA = "obra_publica";
        Integer id;
        String municipio;
        Integer ejercicio;
        String concepto;
        Integer cantidad_obras;
        Double monto_ejercido;
        String line;
        int x, y=0;
        
        BufferedWriter bw = null;
        
        try {
            InputStream in = new FileInputStream
            (new File("db.sql"));
            OutputStream out = new FileOutputStream
            (new File("tables.sql"));
            byte[] buf = new byte[1024];
            int len;
            while ((len = in.read(buf)) > 0) {
               out.write(buf, 0, len);
            }
            in.close();
            out.close();
            BufferedReader br;
            br = new BufferedReader(new 
                    FileReader("Obra_Publica_Municipios.csv"));
            bw = new BufferedWriter(new FileWriter("tables.sql", true));
            bw.newLine();     
            String[] concepts = br.readLine().split(",",-1);
            //split it in lines and work them
            while ((line = br.readLine()) != null) {
                String[] values = line.split(",", -1);
                municipio = values[2].trim();
                ejercicio = Integer.parseInt(values[50]);
                x = 3;
                while (x < 33){
                    if( !"0".equals(values[x]) && !"NULL".equals(values[x]) ){
                        id = y;
                        y++;
                        concepto = concepts[x];
                        concepto = concepto.substring(9).replace("_", " ");
                        cantidad_obras = Integer.parseInt(values[x]);
                        monto_ejercido = Double.parseDouble(values[x+1]);
                        bw.flush();
                        bw.write(String
                                .format("insert into obra_publica values "
                                        + "(%d, '%s', %d, '%s', %d, %f );",
                                        id, municipio, ejercicio, concepto, 
                                        cantidad_obras, monto_ejercido));
                        bw.newLine();
                    }
                    x += 2;
                }
            }
            bw.close();
            
            br = new BufferedReader(new 
                    FileReader("Informacion_Presupuestal_Municipios.csv"));
            bw = new BufferedWriter(new FileWriter("tables.sql", true));
            bw.newLine();
            y = 0;
            concepts = br.readLine().split(",",-1);
            //split it in lines and work them
            while ((line = br.readLine()) != null) {
                String[] values = line.split(",", -1);
                municipio = values[2].trim();
                ejercicio = Integer.parseInt(values[28]);
                int poblacion;
                x = 16;
                while (x <= 26){
                    if( !"0".equals(values[x]) && !"NULL".equals(values[x]) && !values[x].isEmpty()){
                        id = y;
                        y++;
                        concepto = concepts[x];
                        concepto = concepto.substring(4).replace("_", " ");
                        poblacion = Integer.parseInt(values[27]);
                        monto_ejercido = Double.parseDouble(values[x]);
                        bw.flush();
                        bw.write(String
                                .format("insert into presupuesto values "
                                        + "(%d, '%s', %d, '%s', %f, %d );",
                                        id, municipio, ejercicio, concepto, 
                                        monto_ejercido, poblacion));
                        bw.newLine();
                    }
                    x++;
                }
            }
            bw.close();
        } catch (FileNotFoundException ex) {
            Logger.getLogger(Conversor_obra_publica.class.getName()).log(Level.SEVERE, null, ex);
        } catch (IOException ex) {
            Logger.getLogger(Conversor_obra_publica.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
}
