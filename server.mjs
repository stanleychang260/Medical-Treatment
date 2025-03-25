import express from "express";
import OpenAI from "openai";
import path from "path";
import dotenv from "dotenv";

dotenv.config();



const app = express();
const __dirname = path.resolve();

app.use(express.static(path.join(__dirname, 'otherphp')));

app.get("/", (req, res) => {
  res.sendFile(path.join(__dirname, 'otherphp', 'chat.html'));
});

app.get("/ask", (req, res) => {
  async function main() {
    try {
      const userQuestion = req.query.question;
      const additionalMessage = "如果以上或以下問題跟醫療相關你再回答我，跟醫療無相關的問題就回答:不好意思我只回答醫療相關的問題";
      const combinedMessage = `${userQuestion} ${additionalMessage}`;

      const completion = await openai.chat.completions.create({
        messages: [{ role: "user", content: combinedMessage }],
        model: "gpt-4"
      });

      res.json({ answer: completion.choices[0].message.content });
    } catch (error) {
      console.error("Error calling OpenAI API:", error);
      res.status(500).json({ error: "Internal Server Error" });
    }
  }
  main();
});

app.listen(3000, () => {
  console.log("server is running on port 3000");
});
