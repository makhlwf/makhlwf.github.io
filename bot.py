from pyrogram import Client
from pyrogram import Client, filters

app = Client(
    "my_bot",
    bot_token="5219227363:AAE6uedkLgPlh-XUQ9KEKwRms5-rtAIz9uA",
    api_id="151019",
    api_hash="3dee3e3bedad4738f81287268180f"
)
@app.on_message(filters.text & filters.private)
def echo(client, message):
    if message.text == "/start":
            message.reply("Hi , You Make "+message.text)
app.run()
